const toastTrigger = document.getElementById('tableBtn')
  const toastLiveExample = document.getElementById('liveToast')

  if (toastTrigger) {
    const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
    toastTrigger.addEventListener('click', () => {
      toastBootstrap.show()
    })
  }

  function toastFunction(title, value){
      const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
      document.getElementById('titleMessage').innerHTML=title;
      document.getElementById('message').innerHTML=value;
      if (title == "Error"){
          document.getElementById('liveToast').classList.add('text-bg-danger');
      } else {
          document.getElementById('liveToast').classList.remove('text-bg-danger');
      }



      toastBootstrap.show()
    
    }