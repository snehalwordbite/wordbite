var search = () =>{
    let searchInput = document.getElementById('inputSearch');
    searchInput.addEventListener("keypress",(event)=>{
        if(event.key==="Enter"){
            console.log(event.key);
        }
    });
}