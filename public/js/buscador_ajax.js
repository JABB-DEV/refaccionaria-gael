 const cambio = (select, objetivo, img, param) => {
            $(()=>{
            let data = $('form').serialize()
            switch (param) {
                case 'tipo':
                    if(select.value === ''){
                        objetivo.innerHTML = "<option selected disabled>Selecciona una opcion</option>"
                        window.year.innerHTML = '<option selected disabled>Selecciona una opcion</option>'
                        window.modelo.innerHTML = '<option selected disabled>Selecciona una opcion</option>'
                        window.color.innerHTML = '<option selected disabled>Selecciona una opcion</option>'

                        window.cilindraje_estado.setAttribute("src", "{{asset('img/minus.jpg')}}")
                        window.year_estado.setAttribute("src", "{{asset('img/minus.jpg')}}")
                        window.modelo_estado.setAttribute("src", "{{asset('img/minus.jpg')}}")
                        window.color_estado.setAttribute("src", "{{asset('img/minus.jpg')}}")
                        img.setAttribute("src", "{{asset('img/minus.jpg')}}")
                        return
                    }else{
                        objetivo.innerHTML = "<option selected disabled>Selecciona una opcion</option>"
                        window.year.innerHTML = '<option selected disabled>Selecciona una opcion</option>'
                        window.modelo.innerHTML = '<option selected disabled>Selecciona una opcion</option>'

                        window.cilindraje_estado.setAttribute("src", "{{asset('img/minus.jpg')}}")
                        window.year_estado.setAttribute("src", "{{asset('img/minus.jpg')}}")
                        window.modelo_estado.setAttribute("src", "{{asset('img/minus.jpg')}}")
                    }
                    break
                case 'sistema':
                    if(select.value === ''){
                        objetivo.innerHTML = ''
                        objetivo.innerHTML = "<option selected disabled>Selecciona una opcion</option>"
                        img.setAttribute("src", "{{asset('img/minus.jpg')}}")
                        return
                    }else{
                        img.setAttribute("src", "{{asset('img/ok.png')}}")
                    }
                    break
                default:
                if(select.value === ''){
                    objetivo.innerHTML = ''
                    objetivo.innerHTML = "<option selected disabled>Selecciona una opcion</option>"
                    img.setAttribute("src", "{{asset('img/minus.jpg')}}")
                    return
                }    
            }
                    $.ajax({
                        type:'POST',
                        url:"/showSelect/"+param,
                        data: data,
                        beforeSend: () =>{
                            $.blockUI({ message: '<img src="{{asset('img/91.gif')}}" width="150" height="150" /><br><p>Cargando recurso...</p>' })
                        },
                        success: data => {
                            for(let i = 0; i < data.length; i++){
                                $.each( data[i], (key, value)=>{
                                 objetivo.innerHTML += "<option value='"+value+"'>"+value+"</option>"
                            })
                            console.log(i)
                            }
                            img.setAttribute("src", "{{asset('img/ok.png')}}")
                        },
                        complete: (xhr, status)=>{
                            $.unblockUI()
                        }
                    })
            })
}