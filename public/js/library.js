const BMLib = {

    getById: function (id) {
        return document.getElementById(id);
    },

    setClassName: function (element, className) {
        element.classList.add(className);
    },

    removeClassName: function (element, className) {
        element.classList.remove(className);
    },

    getDataset: function (element) {
        return element.dataset;
    },

    appendChild: function (element, child) {
        element.appendChild(child);
    },

    http: {
        get: async function(url) {
            return fetch(url, {
                method: 'GET'
            }).then(response => response.json())
        },

        post: async function(url, data) {
            return fetch(url, {
                method: 'POST',
                body: JSON.stringify(data)
            }).then(response => response.json())
        }
    }
}