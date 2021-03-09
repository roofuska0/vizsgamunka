// DOMContentLoaded -> megvárja amíg betöltődik a teljes weboldal
document.addEventListener('DOMContentLoaded',()=>{

    let lista=''; // ide kerül az sql eredménye

    // meghívja telepuleslista.php-t 
    async function telepuleslista(){
        let url='http://localhost/Jancsó_Anita_Reg_másolata/selects.php';  // ide a telepuleslista.php elérési útja kell
        let response = await fetch(url);
        
        lista = await response.json();  // sql eredménye
     
        let megye = document.querySelector('#megye'); // a #megye id-jü select kiválasztása
    
        let megyeid='';
        lista.forEach(elem => {
            // a feltétel azért kell, hogy minden megynév (megyeid) csak egyszer szerepeljen
            if (megyeid!=elem.MegyeID) {
                // feltolti az <options></options>
                megye.innerHTML+='<option value="'+elem.MegyeID+'">'+elem.MegyeNev+'</option>';
                megyeid=elem.MegyeID;
            }
            
        });
        megyevaltas();  // feltölti az első megye településeit
    }
    
    // frissíti a település listát
    function megyevaltas(){
        let megyeid = document.querySelector('#megye').value; // a kiválasztott megye id-je
        let telepules = document.querySelector('#telepules'); // a #telepules id-jü select kiválasztása
        telepules.innerHTML=''; // összes option törlése
       
        lista.forEach(elem => {
            if (megyeid == elem.MegyeID) {
                // az adott megyeid-hez tartozó település feltöltése
                telepules.innerHTML+='<option value="'+elem.ID+'">'+elem.TelepulesNev+'</option>';
               
            }
            
        });
    }
    
    // onchange esemény rendelése a  #megye id-jü select-hez
    document.querySelector('#megye').addEventListener("change", megyevaltas);
    
    telepuleslista(); // betölti a település listát, amikor az oldal betöltődik

});



