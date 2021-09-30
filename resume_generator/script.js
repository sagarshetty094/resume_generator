//alert("loading");
function addNeWWEfield() {
    // console.log("Adding new field");

     let newNode=document.createElement('textarea');
     newNode.classList.add('form-control');
     newNode.classList.add('weField');
     newNode.classList.add('mt-2');
     newNode.setAttribute('rows',3);
     newNode.setAttribute('placeholder','enter here');

     let weOb = document.getElementById("we");
     let weAddButtonOb =document.getElementById("weAddButton");

     weOb.insertBefore(newNode, weAddButtonOb);
}

function addNeWAQfield(){
        //  console.log("Adding new field");
        let newNode=document.createElement('textarea');
        newNode.classList.add('form-control');
        newNode.classList.add('aqField');
        newNode.classList.add('mt-2');
        newNode.setAttribute('rows',3);
        newNode.setAttribute('placeholder','enter here');
   
        let aqOb = document.getElementById("aq");
        let aqAddButtonOb =document.getElementById("aqAddButton");
   
        aqOb.insertBefore(newNode, aqAddButtonOb);
}

// generating CV
function generateCV(){
    // console.log("generating CV");
    let nameField=document.getElementById("nameField").value;

    let nameT1=document.getElementById("nameT1");

    nameT1.innerHTML =nameField;

    // direct
    document.getElementById("nameT2").innerHTML=nameField;

    // contact
    document.getElementById("contactT").innerHTML=document.getElementById("contactField").value;

    // address
    document.getElementById("addressT").innerHTML=document.getElementById("addressField").value;

    // links
    document.getElementById("fbT").innerHTML=document.getElementById("fbField").value;
    document.getElementById("instaT").innerHTML=document.getElementById("instaField").value;
    document.getElementById("linkedT").innerHTML=document.getElementById("linkedinField").value;

    // objective
    document.getElementById("objectiveT").innerHTML=document.getElementById("objectiveField").value;

    // we
    let wes=document.getElementsByClassName('weField');

    let str='';
    // ofloop
    for(let e of wes)
    {
        str=str+`<li> ${e.value} </li>`;
    }

    document.getElementById('weT').innerHTML = str;

    // aq
    let aqs=document.getElementsByClassName("aqField");
    let str1 ="";

    for(let e of aqs) {
        str1 +=`<li> ${e.value} </li>`;
    }

    document.getElementById('aqT').innerHTML=str1;

    // setting img
    let file=document.getElementById('imgField').files[0];
    console.log(file);

    let reader=new FileReader();
    reader.readAsDataURL(file);

    console.log(reader.result);

    // set the img
    reader.onloadend = function() {
      document.getElementById('imgTemplate').src = reader.result;
     };

    document.getElementById('cv-form').style.display='none';
    document.getElementById('cv-template').style.display= 'block';
}

//print CV
function printCV(){
    window.print();
}

// window.onload =function(){
//     document.getElementById("download")
//     .addEventListener("click",()=>{
//         const cvtemplate =this.document.getElementsById("cvtemplate");
//         console.log(cvtemplate);
//         console.log(window);
//         html2pdf().from(cvtemplate).save();

//     }) 
// }
