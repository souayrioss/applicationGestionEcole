const divAdmin =document.querySelector('#divAdmin');
const divTeacher =document.querySelector('#divTeacher');
const divStudent =document.querySelector('#divStudent');
const tabStudent =document.querySelector('#tabStudent');
const tabTeacher =document.querySelector('#tabTeacher');
const tabParent =document.querySelector('#tabParent');
const tabAdmin =document.querySelector('#tabAdmin');
const tabRole = document.querySelector('#tabRole');
const userRadios = document.getElementsByName('user');


console.log(tabRole);
for (let i = 0; i < userRadios.length; i++) {
    userRadios[i].addEventListener('click', function(){
        let valradio = document.querySelector('input[name="user"]:checked').value;
        if(valradio == "admin"){
            divAdmin.classList.remove("hidden");
            divTeacher.classList.add("hidden");
            divStudent.classList.add("hidden");
        }else if(valradio == "teacher"){
            divTeacher.classList.remove("hidden");
            divAdmin.classList.add("hidden");
            divStudent.classList.add("hidden");
        }else if(valradio == "student"){
            divStudent.classList.remove("hidden");
            divTeacher.classList.add("hidden");
            divAdmin.classList.add("hidden");
        }
    })
}
// for (let i = 0; i < tabRole.length; i++) {
//     tabRole[i].addEventListener('click', function(){
//         if(valbtn == "admin"){
//             tabAdmin.classList.remove("hidden");
//             tabTeacher.classList.add("hidden");
//             tabStudent.classList.add("hidden");
//             tabParent.classList.add("hidden");
//         }else if(valbtn == "teacher"){
//             abAdmin.classList.add("hidden");
//             tabTeacher.classList.remove("hidden");
//             tabStudent.classList.add("hidden");
//             tabParent.classList.add("hidden");
//         }else if(valbtn == "student"){
//             abAdmin.classList.add("hidden");
//             tabTeacher.classList.add("hidden");
//             tabStudent.classList.remove("hidden");
//             tabParent.classList.add("hidden");
//         }else if(valbtn == "parent"){
//             abAdmin.classList.add("hidden");
//             tabTeacher.classList.add("hidden");
//             tabStudent.classList.add("hidden");
//             tabParent.classList.remove("hidden");
//         }
//     })
// }
tabRole.addEventListener("click", (e) => {
    if (e.target.value == "admin") {
        tabAdmin.classList.remove("hidden");
        tabTeacher.classList.add("hidden");
        tabStudent.classList.add("hidden");
        tabParent.classList.add("hidden");
    }else if (e.target.value == "student") {
        tabAdmin.classList.add("hidden");
        tabTeacher.classList.add("hidden");
        tabStudent.classList.remove("hidden");
        tabParent.classList.add("hidden");
    }else if (e.target.value == "teacher") {
        tabAdmin.classList.add("hidden");
        tabTeacher.classList.remove("hidden");
        tabStudent.classList.add("hidden");
        tabParent.classList.add("hidden");
    }else if (e.target.value == "parent") {
            tabAdmin.classList.add("hidden");
            tabTeacher.classList.add("hidden");
            tabStudent.classList.add("hidden");
            tabParent.classList.remove("hidden");
    }
});
