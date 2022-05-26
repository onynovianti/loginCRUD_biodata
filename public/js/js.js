document.addEventListener("DOMContentLoaded", function(event) {
  var toastTrigger = document.getElementById('liveToastBtn')
  var toastLiveExample = document.getElementById('liveToast')
  if (toastTrigger) {
    toastTrigger.addEventListener('click', function() {
      var toast = new bootstrap.Toast(toastLiveExample)

      toast.show()
    })
  }
});