function initialisation(){
    var objet = document.getElementById('page_1');
    objet.style.display = "none";
}


function change_Onglet(ID1, ID2){
    var objet = document.getElementById('page_1');
    var objet2 = document.getElementById('page_2');

    var estActive1 = document.getElementById(ID1).classList;
    var estActive2 = document.getElementById(ID2).classList;

    if(!estActive1.contains("active")){
        estActive2.remove("active");
        estActive1.add("active");
        if(objet.style.display == 'none')
        {
            objet.style.display = '';
            objet2.style.display = 'none';
        }
        else {

            objet2.style.display = '';
            objet.style.display = 'none';
        }
    }

}