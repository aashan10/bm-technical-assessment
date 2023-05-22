const copyToClipboard = (element) => {
    const textarea = document.createElement('textarea');

    textarea.style.width = '1px';
    textarea.style.height = '1px';
    
    document.body.appendChild(textarea);

    textarea.value = element.innerText;
    textarea.select();

    document.execCommand('copy');
    setTimeout(() => {
        document.body.removeChild(textarea);
    }, 0)
}


displayTarget.addEventListener('click', () => {
    copyToClipboard(displayTarget);
});


