// Este é o service worker com a rede Cache-first

const CACHE = "pwabuilder-precache";
const precacheFiles = [
  /* Adicione uma matriz de arquivos para pré-cache para seu aplicativo */
];

self.addEventListener("install", function (event) {
  console.log("[PWA Builder] Install Event processing");

  console.log("[PWA Builder] Skip waiting on install");
  self.skipWaiting();

  event.waitUntil(
    caches.open(CACHE).then(function (cache) {
      console.log("[PWA Builder] Caching pages during install");
      return cache.addAll(precacheFiles);
    })
  );
});

//Permitir que sw controle a página atual
self.addEventListener("activate", function (event) {
  console.log("[PWA Builder] Claiming clients for current page");
  event.waitUntil(self.clients.claim());
});

// Se alguma busca falhar, ele procurará a solicitação no cache e a atenderá a partir daí primeiro
self.addEventListener("fetch", function (event) { 
  if (event.request.method !== "GET") return;

  event.respondWith(
    fromCache(event.request).then(
      function (response) {
        // A resposta foi encontrada no cache, então respondemos com ela e atualizamos a entrada

        // É aqui que chamamos o servidor para obter a versão mais recente 
        // arquivo para usar na próxima vez que mostrarmos a visualização
        event.waitUntil(
          fetch(event.request).then(function (response) {
            return updateCache(event.request, response);
          })
        );

        return response;
      },
      function () {
        // A resposta não foi encontrada no cache, então a procuramos no servidor
        return fetch(event.request)
          .then(function (response) {
            // Se a solicitação foi bem-sucedida, adicione ou atualize-a no cache
            event.waitUntil(updateCache(event.request, response.clone()));

            return response;
          })
          .catch(function (error) {
            console.log("[PWA Builder] Network request failed and no cache." + error);
          });
      }
    )
  );
});

function fromCache(request) {
  // Verifique se você o tem no cache
  // Resposta de retorno
  //Se não estiver no cache, retorne
  return caches.open(CACHE).then(function (cache) {
    return cache.match(request).then(function (matching) {
      if (!matching || matching.status === 404) {
        return Promise.reject("no-match");
      }

      return matching;
    });
  });
}

function updateCache(request, response) {
  return caches.open(CACHE).then(function (cache) {
    return cache.put(request, response);
  });
}
