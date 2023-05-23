const requests = [
  fetch("https://jsonplaceholder.typicode.com/posts"),
  fetch("https://jsonplaceholder.typicode.com/users"),
  fetch("https://jsonplaceholder.typicode.com/albums"),
];

Promise.all(requests).then((result) =>
  Promise.all(result.map((response) => response.json())).then(objects => console.log(objects))
);
