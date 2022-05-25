function copyToClipBoard() {
    var copyText = '0-800-000-000';
    navigator.clipboard.writeText(copyText)

    var tooltip = document.getElementById("my-hint");
    tooltip.innerHTML = "Скопійовано!";
}

function cpAgain() {
    var tooltip = document.getElementById("my-hint");
    tooltip.innerHTML = "Скопіювати";
}

function copyToClipBoardF() {
    var copyText = '0-800-000-000';
    navigator.clipboard.writeText(copyText)

    var tooltip = document.getElementById("my-hint-footer");
    tooltip.innerHTML = "Скопійовано!";
}

function cpAgainF() {
    var tooltip = document.getElementById("my-hint-footer");
    tooltip.innerHTML = "Скопіювати";
}

function copyToClipBoardO() {
    var copyText = '0-800-000-000';
    navigator.clipboard.writeText(copyText)

    var tooltip = document.getElementById("my-hint-order");
    tooltip.innerHTML = "Скопійовано!";
}

function cpAgainO() {
    var tooltip = document.getElementById("my-hint-order");
    tooltip.innerHTML = "Скопіювати";
}

function copyToClipBoardP() {
    var copyText = '12промокод21';
    navigator.clipboard.writeText(copyText)

    var tooltip = document.getElementById("prom");
    tooltip.innerHTML = "Скопійовано!";
}

function cpAgainP() {
    var tooltip = document.getElementById("prom");
    tooltip.innerHTML = "12промокод21";
}
