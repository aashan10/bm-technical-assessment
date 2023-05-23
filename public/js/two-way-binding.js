


// This will be the state object to store our data, kind of like something you get when you use useState in React
const state = {
    _data: null,
};


// This will allow you to tap into changed values from any arbitrary code, something like useEffect in React
const subscribers = [
    function (value) {
        displayTarget.innerText = value;
    },
    function (value) {
        if (bindTarget.value !== value) {
            bindTarget.value = value;
        }
    }
];


// This defines a fake `data` property on the state, based on the _data property 
// which we can use to get and set values
Object.defineProperty(state, 'data', {
    get: function () {
        return this._data;
    },
    set: function (value) {
        this._data = value;
        // This will call all the subscribers with the new value
        subscribers.forEach(subscriber => subscriber(value));
    },
});



// This is for updating state when the user types in the input
bindTarget.addEventListener('input', (event) => {
    state.data = event.target.value;
});


// This is for updating state when the user clicks the reset button
reset.addEventListener('click', () => {
    state.data = 'Voila, it works!';
})


