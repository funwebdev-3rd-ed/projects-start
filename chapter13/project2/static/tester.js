document.addEventListener("DOMContentLoaded", function() {
    
    const myForm = document.querySelector("#stockForm");
    const stockSym = document.querySelector("#symbol");
    const msg = document.querySelector("#notifier");

    //const url = "https://guarded-sands-59956.herokuapp.com/http-tester.php";
    //const url = "http://www.randyconnolly.com/funwebdev/3rd/http-tester.php";
    const url = "/" + stockSym.value;   
    console.log(url);

    document.querySelector("#btnInsert").addEventListener('click', postData );
    document.querySelector("#btnUpdate").addEventListener('click', putData );
    document.querySelector("#btnDelete").addEventListener('click', deleteData );

    async function  postData(e) {
        e.preventDefault();
        const data = await fetchData(url,'POST');
        msg.textContent = data.message;
    }

    async function putData(e) {
        e.preventDefault();
        const data = await fetchData(url,'PUT');
        msg.textContent = data.message;        
    }
    
    async function deleteData(e) {
        e.preventDefault();
        const data = await fetchData(url,'DELETE');
        msg.textContent = data.message; 
    }  
    
    // make a GET/PUT/POST/DELETE request using fetch
    async function fetchData(url, method) {
        try {
            let formData = new FormData(myForm);
            const encData = new URLSearchParams();
            for (let pair of formData) {
                encData.append(pair[0], pair[1]);
            }
    
            const options = {
                method: method,
                mode: 'cors',         
                body: encData           
            };

            const resp = await fetch(url, options);
            const data = await resp.json();    
            return data;
        }
        catch (err) {
            //alert('fetch error err=' + err);
            console.log('fetch error err=' + err);
        }
    }
});



