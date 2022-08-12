<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email{
    protected $nombre;
    protected $email;
    protected $telefono;
    protected $mensaje;

    public function __construct($nombre, $email,$telefono,$mensaje){
        $this->nombre =$nombre;
        $this->email =$email;
        $this->telefono= $telefono;
        $this->mensaje = $mensaje;
    }

    public function enviarMensaje(){
            $respuestas = $_POST['contacto'];
            $mail = new PHPMailer();
            
            $mail->isSMTP();
            $mail->Host='smtp.mailtrap.io';
            $mail->SMTPAuth = true;
            $mail->Username = 'e6796b0e71df8d';
            $mail->Password = 'b7f69a17e8b742';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 465;

            $mail->setFrom($_POST['contacto']['email']);
            $mail->addAddress('electricSolutions@correo.com');
            
            $mail->Subject= 'AG Electric Solutions';


            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';

            $contenido = '<html>';
            $contenido .= '<style >
                                html {
                                    box-sizing: border-box;
                                
                                }
                                *, *:before, *:after {
                                    box-sizing: inherit;
                                }
                                body{
                                    background: rgba(0, 0, 0, 0.7) url(https://images.pexels.com/photos/2865415/pexels-photo-2865415.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);
                                    
                                    background-repeat: no-repeat;
                                    background-size: cover;
                                    background-blend-mode: darken;
                                    color: white;
                                }
                                .titulo{
                                background-color: rgba(255,255,255,0.1);
                                
                                border-style: solid;
                                border-radius: .5rem;
                                padding-bottom: 15rem;
                                }
                                    .titulo h2{
                                        
                                    color: #B5B2B2;
                                        text-transform: uppercase;
                                        text-align: center;
                                        
                                    }
                                    .titulo span {
                                        color: #052bef;
                                        
                                    }
                                    .titulo h3{
                                        text-align: center;
                                        font-family:"Times New Roman", Times, serif;
                                    }
                                    .contenido-mensaje{
                                        width: min(90%, 120rem);
                                        margin: 0 auto;
                                    }
                                    .contenido-mensaje h4{
                                        margin: 0;
                                    }
                            
                                </style>';



            $contenido .= '<div class="titulo">';
            $contenido .= '<h2><span>Ag</span> Electric solutions</h2>';
            $contenido .= '<h3>Alguien ha enviado un Mensaje</h3>';
            $contenido .= '<div class="contenido-mensaje">';
            $contenido .= '<h4>Nombres:</h4>';
            $contenido .= '<p>'.$this->nombre .'</p>';
            $contenido .= '<h4>Email:</h4>';
            $contenido .= '<p>'.$this->email .'</p>';
            $contenido .= '<h4>Telefono:</h4>';
            $contenido .= '<p>'.$this->telefono .'</p>';
            $contenido .= '<h4>Mensaje:</h4>';
            $contenido .= '<p>'.$this->mensaje .'</p>';
            $contenido .= '</div>';
            $contenido .= '</div>';
            $contenido .= '</html>';



            $mail->Body = $contenido;
            $mail->AltBody = 'Esto es texto alternativo sin html';
            //Enviar Email
            if($mail->send()){
                $mensaje = 'Mensaje enviado Correctamente';
            }else{
                $mensaje = 'El mensaje no se pudo enviar';
                
            }
           
            return $mensaje;
    }
    


}