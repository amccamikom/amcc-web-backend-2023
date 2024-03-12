function checkTodo(e) {
    let text = document.getElementById('list-'+e.dataset.list)
    
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'checked.php');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log(xhr.responseText);
        }
    };
    xhr.send(`id=${e.dataset.list}&status=${e.checked ? 1 : 0}`);

    if (e.checked) {
        text.classList.add('line-through')
    } else {
        text.classList.remove('line-through');
    }
}