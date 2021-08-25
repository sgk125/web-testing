        let links = document.querySelector('.main-content a');
        const cursors = document.querySelector('.cur');
        document.addEventListener('mousemove', e=>{
                    
        let x = e.pageX;
        let y = e.pageY;
        cursors.setAttribute("style", "top: "+(e.pageY - 10)+"px; left: "+(e.pageX-10)+"px;");
        
        });

        document.addEventListener('click',() =>{
            
            cursors.classList.add("expand");
            setTimeout(() => {
                cursors.classList.remove("expand")
            }, 500);
        })