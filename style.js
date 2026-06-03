document.getElementById('contactForm').addEventListener('submit', (event) => {
    const name = document.getElementById('name').value;
    const companyName = document.getElementById('companyName').value;
    const email = document.getElementById('email').value;
    const age = document.getElementById('age').value;
    const message = document.getElementById('message').value;

    if (name === "" || companyName === "" || email === "" || age === "" || message === "") {
        alert("必須項目が未入力です。入力内容をご確認ください。");
        event.preventDefault();
        return;
    }

    const confirmMessage = "下記の内容を本当に送信しますか？\n\n" +
                        "お名前 ➡ " + name + "\n" +
                        "会社名 ➡ " + companyName + "\n" +
                        "メールアドレス ➡ " + email + "\n" +
                        "年齢 ➡ " + age + "\n" +
                        "お問い合わせ内容 ➡ " + message;

    if (!confirm(confirmMessage)) {
        event.preventDefault();
    }
});

let currentIndex = 0;
const colors = ['blue', 'red', 'yellow', 'gray'];

document.querySelector('#colorButton').addEventListener('click', () => {
    const footer = document.querySelector('footer');
    footer.style.backgroundColor = colors[currentIndex];
    currentIndex = (currentIndex + 1) % colors.length;
});