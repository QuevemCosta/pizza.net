// ----------------Navegcão--------------
//HOME
document.querySelector('#navhome').addEventListener('click',(e=>{
    document.getElementById('navhome').style.borderBottom = "thick solid #ddd";
    document.getElementById('navmenu').style.borderBottom = "none";
    document.getElementById('navsobre').style.borderBottom = "none";
    document.getElementById('navcontato').style.borderBottom = "none";
    //
    document.getElementById("contato").classList.remove('active')
    document.getElementById("sobre").classList.remove('active')
    document.querySelector("#menu").classList.remove('active')
    document.getElementById("home").classList.add('active')
  }))
  //MENU
document.querySelector('#navmenu').addEventListener('click',(e=>{
  document.getElementById('navhome').style.borderBottom = "none";
  document.getElementById('navmenu').style.borderBottom = "thick solid #ddd";
  document.getElementById('navsobre').style.borderBottom = "none";
  document.getElementById('navcontato').style.borderBottom = "none";
//
      document.getElementById("home").classList.remove('active')
      document.getElementById("contato").classList.remove('active')
      document.getElementById("sobre").classList.remove('active')
      document.getElementById("menu").classList.add('active')

    }))
    //SOBRE
document.querySelector('#navsobre').addEventListener('click',(e=>{
  document.getElementById('navhome').style.borderBottom = "none";
  document.getElementById('navmenu').style.borderBottom = "none";
  document.getElementById('navsobre').style.borderBottom = "thick solid #ddd";
  document.getElementById('navcontato').style.borderBottom = "none";
//
        document.getElementById("home").classList.remove('active')
        document.getElementById("contato").classList.remove('active')
        document.getElementById("sobre").classList.add('active')
        document.querySelector("#menu").classList.remove('active')

      }))
//CONTATO
document.querySelector('#navcontato').addEventListener('click',(e=>{
  document.getElementById('navhome').style.borderBottom = "none";
  document.getElementById('navmenu').style.borderBottom = "none";
  document.getElementById('navsobre').style.borderBottom = "none";
  document.getElementById('navcontato').style.borderBottom = "thick solid #ddd";
//
          document.getElementById("home").classList.remove('active')
          document.getElementById("contato").classList.add('active')
          document.getElementById("sobre").classList.remove('active')
          document.querySelector("#menu").classList.remove('active')

        }))
  //--------------------Load do login-----------------
window.addEventListener('load',()=>{
  document.querySelector('#login form').addEventListener('submit',(e=>{
    e.preventDefault()
    document.body.classList.add('loanding')
    setTimeout(()=>{
      document.querySelector('#login').classList.remove('active')
    },300)
    setTimeout(()=>{
      document.querySelector('#nav').style.display='block'
      document.getElementById('navhome').style.borderBottom = "thick solid #ddd";
      document.querySelector('#home').classList.add('active')
      document.querySelector('#capa').classList.add('active')
      document.querySelector('#logo').style.display='none'
      setTimeout(()=>{
        document.body.classList.remove('loanding')
      },200)
    },200)
  }))
})
//animção seguint ao login
//-------------------------------------------------
