const apiUrl = "http://localhost:8000/index.php";

const createUser = (dataObj) => {
  fetch(apiUrl, {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify(dataObj),
  })
    .then((response) => response.json()) // Преобразуем ответ в JSON
    .then((data) => console.log(data)) // Выводим полученные данные
    .catch((error) => console.error("Error:", error)); // Обработка ошибок
};

export { createUser };
