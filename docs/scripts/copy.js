function copyc() {
  var copyText = document.getElementsByClassName("darker");

  copyText.select();
  copyText.setSelectionRange(0, 99999); 
  document.execCommand("copy");
  M.toast({html: 'Copiado!'})
}