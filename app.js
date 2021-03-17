if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('serviceworker.js')
    .then((reg) => console.log('service worker registered', reg))
    .catch((err) => console.log('service is not registered', err))
}