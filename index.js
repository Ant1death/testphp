const form = document.querySelector('form');
const postData = async (url, data) => {
    let res = await fetch(url, {
        method: 'POST',
        body: data
    });

    return await res.text();
};

form.addEventListener('submit', (e) => {
    e.preventDefault();
    const formData = new FormData(form);
    let statusMessage = document.createElement('h3');
    statusMessage.classList.add('status');
    document.querySelector('.title').appendChild(statusMessage);
    document.querySelector('.status').textContent = 'Телефон добавлен в базу данных, пожалуйста обновите страницу';
    postData ('index.php', formData)
});

