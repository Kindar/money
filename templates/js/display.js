
function Main() {
    document.getElementById("maindisplay").style.display = "block";
    document.getElementById("bankdisplay").style.display = "none";
    document.getElementById("cashdisplay").style.display = "none";
    document.getElementById("loandisplay").style.display = "none";
}

function Bank() {
    document.getElementById("maindisplay").style.display = "none";
    document.getElementById("bankdisplay").style.display = "block";
    document.getElementById("cashdisplay").style.display = "none";
    document.getElementById("loandisplay").style.display = "none";
}

function Cash() {
    document.getElementById("maindisplay").style.display = "none";
    document.getElementById("bankdisplay").style.display = "none";
    document.getElementById("cashdisplay").style.display = "block";
    document.getElementById("loandisplay").style.display = "none";
}

function Loan() {
    document.getElementById("maindisplay").style.display = "none";
    document.getElementById("bankdisplay").style.display = "none";
    document.getElementById("cashdisplay").style.display = "none";
    document.getElementById("loandisplay").style.display = "block";
}

function BankAdd() {
    document.getElementById("BankAdd").style.display = "block";
    document.getElementById("BankSub").style.display = "none";
    document.getElementById("BankToCash").style.display = "none";
}
function BankSub() {
    document.getElementById("BankAdd").style.display = "none";
    document.getElementById("BankSub").style.display = "block";
    document.getElementById("BankToCash").style.display = "none";
}
function BankTocash() {
    document.getElementById("BankAdd").style.display = "none";
    document.getElementById("BankSub").style.display = "none";
    document.getElementById("BankToCash").style.display = "block";
}
function CashAdd() {
    document.getElementById("CashAdd").style.display = "block";
    document.getElementById("CashSub").style.display = "none";
}
function CashSub() {
    document.getElementById("CashAdd").style.display = "none";
    document.getElementById("CashSub").style.display = "block";
}
