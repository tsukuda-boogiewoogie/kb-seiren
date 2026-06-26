// 指定formの中のelement.valueを指定してsubmit
function setValSubmit(fObj, element, val) {
    fObj.elements[element].value = val;
    fObj.submit();
}
