// function mudar1(){
//     let img = document.getElementById("pasta1")
//     console.log("Funcionando")
//     img.src="imagens/pastaf.png"
   
// }
// function normal1(){
//     let img = document.getElementById("pasta1")
//     console.log("Funcionando")
//     img.src="imagens/pasta.png"
// }
// function mudar2(){
//     let img = document.getElementById("pasta2")
//     console.log("Funcionando")
//     img.src="imagens/pastaf.png"
   
// }
// function normal2(){
//     let img = document.getElementById("pasta2")
//     console.log("Funcionando")
//     img.src="imagens/pasta.png"
// }
// function mudar3(){
//     let img = document.getElementById("pasta3")
//     console.log("Funcionando")
//     img.src="imagens/pastaf.png"
   
// }
// function normal3(){
//     let img = document.getElementById("pasta3")
//     console.log("Funcionando")
//     img.src="imagens/pasta.png"
// }
const switchModal = () => {
    const modal = document.querySelector('#modal')
    const actualStyle = modal.style.display
    if(actualStyle == 'block'){
        modal.style.display = 'none'
    }
    else{
        modal.style.display =  'block'
    }
}

const btn = document.querySelector('#pasta2')
btn.addEventListener('click',switchModal)

window.onclick = function (event){
    const modal = document.querySelector('#modal')
    if(event.target == modal){
        switchModal()
    }
}

// const switchModal = () => {
//     const modal = document.querySelector('#modal')
//     const actualStyle = modal.style.display
//     if(actualStyle == 'block'){
//         modal.style.display = 'none'
//     }
//     else{
//         modal.style.display =  'block'
//     }
// }
// const switchModal2 =() => {
//     const modal = document.querySelector('#modal2')
//     const actualStyle = modal.style.display
//     if(actualStyle == 'block'){
//         modal.style.display = 'none'
//     }
//     else{
//         modal.style.display =  'block'
//     }
// }
// const btn = document.querySelector('#pasta2')
// btn.addEventListener('click',switchModal)

// window.onclick = function (event){
//     const modal = document.querySelector('#modal')
//     if(event.target == modal){
//         switchModal()
//     }
// }
// const btnCriar = document.querySelector("#btnCriar")
// btnCriar.addEventListener('click',switchModal2)

// window.onclick = function (event){
//     const modal = document.querySelector('#modal2')
//     if(event.target == modal){
//         switchModal2()

        
//         switchModal()
//     }
//     }


