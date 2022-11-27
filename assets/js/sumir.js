var sumir1 = document.getElementById('sumir1')
var sumir2 = document.getElementById('sumir2')
var sumir3 = document.getElementById('sumir3')
var pesqtxt = document.getElementById('pesqtxt')
var form = document.querySelector('.form')

var pesquisar = document.querySelector('.form')
var searchtext = document.querySelector('.search-text')

pesquisar.addEventListener('click',function(){

    searchtext.style.width = '300px'

        if(sumir1 != null){
            sumir1.style.display = 'none'
        }
       
        sumir2.style.display = 'none'
        sumir3.style.display = 'none'
        pesqtxt.style.display = 'none'
        form.style.cssText = 
            'border-radius: 4px;'+
            'background-color: #A4ABBD;'+
            'height: 44px;'+
            'padding: 10px;'+
            'display: flex;'+
            'justify-content: space-between;'+
            'align-items: center;'
        }
    
)

document.addEventListener("mouseup", function(event) {
    
    if (!pesquisar.contains(event.target)) {
       
        searchtext.style.width = '0'

        if(sumir1 != null){
            sumir1.style.display = 'inline-block'
        }
       
        sumir2.style.display = 'inline-block'
        sumir3.style.display = 'inline-block'

        pesqtxt.style.display = 'inline-block'
        
        form.style.cssText = ''
            
           
        
    }
    
});
