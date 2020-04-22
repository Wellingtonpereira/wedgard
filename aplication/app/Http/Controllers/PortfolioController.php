<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    private $path = 'images/portfolio/';

    //    categorias/category
    private $globe   = 'globe';   // site
    private $desktop = 'desktop'; // sistemas web
    private $mobile  = 'mobile';  // aplicativo
    private $cart    = 'cart';    // e-commerce
        

    public function index(){

        return [
            $this->linense( $this->globe ),
            $this->frankia( $this->globe ),
            $this->frankiaSistema( $this->desktop  ),
            $this->lelis( $this->globe ),
            $this->fazendinha( $this->globe ),
            $this->country( $this->globe ),
            $this->aguia( $this->globe ),
            $this->mundodacrianca( $this->globe ),
            $this->newdrop( $this->globe )
            // $this->lelis( $this->globe  ),
            // $this->teste( $this->mobile ), 
            // $this->teste( $this->cart   ), 
            // $this->teste( $this->desktop), 
            // $this->teste( $this->mobile ), 
            // $this->teste( $this->cart   )
        ];

    }

    public function show( $proj, $type ){

        switch ( $proj ) {
            case 'linense': return $this->linense( $type );                 break;
            case 'linense': return $this->linense( $type );                 break;
            case 'frankia': return $this->frankia( $type );                 break;
            case 'frankiaSistema': return $this->frankiaSistema( $type );   break;
            case 'lelis': return $this->lelis( $type );                     break;
            case 'fazendinha': return $this->fazendinha( $type);            break;
            case 'country': return $this->country( $type );                 break;
            case 'aguia': return $this->aguia( $type );                     break;
            case 'mundodacrianca': return $this->mundodacrianca( $type );   break;
            case 'newdrop': return $this->newdrop( $type );                  break;            
            default:
                return [];
                break;
        }
        
    }

    private function description( $type ){

        switch ( $type ) {
            case 'globe':
                    return '<span style="font-size:14px; color:#aeaeae"><i class="fas fa-globe "></i> Site </span>';
                break;
            case 'desktop':
                    return '<span style="font-size:14px; color:#aeaeae"><i class="fas fa-desktop "></i> Sistemas Web </span>';
                break;
            case 'mobile':
                    return '<span style="font-size:14px; color:#aeaeae"><i class="fas fa-mobile-alt "></i> Aplicativos </span>';
                break;
            case 'cart':
                    return '<span style="font-size:14px; color:#aeaeae"><i class="fas fa-shopping-cart "></i> E-commerce </span>'.$type ;
                break;
            default:
                return '';
                break;
        }
    }

    private function lelis( $category ){

        $description = $this->description( $category );
        return [ 
                'project' => 'lelis',
                'category' => $category,
                'description_category' => $description,
                'img'   =>  $this->path .'lelis.jpg', 
                'title' => 'Lelis e Arruda', 
                'description' => 'Site Lelis e Arruda',
                'galery'=> [
                            [
                                'title' => '',
                                'img'   => $this->path .'lelis.jpg', 
                            ],
                            [
                                'title' => '',
                                'img'   => $this->path .'lelis.png', 
                            ]
                        ],
                'history' => 'Site da empresa de engenharia Lelis e Arruda, exibindo as obras em andamento, as conclúidas e formulário de contato..'
                            
                ];
    }

    private function frankia( $category ){

        $description = $this->description( $category );
        return [ 
                'project' => 'frankia',
                'category' => $category,
                'description_category' => $description,
                'img'   =>  $this->path .'frankia.jpg', 
                'title' => 'Frankia', 
                'description' => 'Site Frankia.com.br',
                'galery'=> [
                            [
                                'title' => 'Tela de Login',
                                'img'   => $this->path .'frankia.jpg', 
                            ],
                            [
                                'title' => 'Tela de Login',
                                'img'   => $this->path .'frankia.png', 
                            ]
                        ],
                'history' => 'Site da plataforma Frankia.com.br com formulário de contato. '
                            
                ];
    }

    private function frankiaSistema( $category ){

        $description = $this->description( $category );
        return [ 
                'project' => 'frankiaSistema',
                'category' => $category,
                'description_category' => $description,
                'img'   =>  $this->path .'frankiaSistema.jpg', 
                'title' => 'Plataforma Frakia', 
                'description' => 'Plataforma Frankia.com.br',
                'galery'=> [
                            [
                                'title' => '',
                                'img'   => $this->path .'frankia.jpg', 
                            ],
                            [
                                'title' => '',
                                'img'   => $this->path .'frankia.png', 
                            ]
                        ],
                'history' => 'Plataforma pensada em ajudar as franquias a ter uma melhor gestão junto de seus franqueados, disponíbilizando os módulos: <br>
                
                        <ul style="">
                            <li>Comunicados e Notícias</li>
                            <li>Chat</li>
                            <li>Pedidos de insumos e serviços</li>
                            <li>Treinamentos</li>
                            <li>Programa de fidelidade</li>
                            <li>Enquetes</li>
                        </ul>

                        <br>

                        A plataforma consta com recursos de log de usuários e uma central de compartilhamento, onde a franquia define qual grupo de usuários podem ver ou não um conteúdo gerado.
                        Além de ter uma listagem dos usuários que tiveram interação com cada conteúdo, aumentando assim a confiabilidade de que a informação chegou corretamente ao seu destino .
                '
                            
                ];
    }

    private function linense( $category ){

        $description = $this->description( $category );
        return [ 
                'project' => 'linense',
                'category' => $category . ',desktop',
                'description_category' => $description,
                'img'   =>  $this->path .'linense.jpg', 
                'title' => 'Clube Atlético Linense', 
                'description' => 'Site e sistema de Minuto a Minuto',
                'galery'=> [
                            [
                                'title' => '',
                                'img'   => $this->path .'linense.jpg', 
                            ],
                            [
                                'title' => '',
                                'img'   => $this->path .'linense.png', 
                            ]
                        ],
                'history' => 'Site todo remodelado, com sistema de multi-elencos do clube, listagem de notícias e uma central
                     de minuto a minuto que transmite em tempo real, os lances dos jogos do Clube Atlético Linense e formulário de contato..'
                            
                ];
    }

    private function fazendinha( $category ){

        $description = $this->description( $category );
        return [ 
                'project' => 'fazendinha',
                'category' => $category,
                'description_category' => $description,
                'img'   =>  $this->path .'fazendinha.jpg', 
                'title' => 'Fazendinha Tropical', 
                'description' => 'Site Fazendinha Tropical',
                'galery'=> [
                            [
                                'title' => '',
                                'img'   => $this->path .'fazendinha.jpg', 
                            ],
                            [
                                'title' => '',
                                'img'   => $this->path .'fazendinha.png', 
                            ]
                        ],
                'history' => 'Site institucional da sorveteria Fazendinha Tropical.'                            
                ];
    }

    private function country( $category ){

        $description = $this->description( $category );
        return [ 
                'project' => 'country',
                'category' => $category,
                'description_category' => $description,
                'img'   =>  $this->path .'country.jpg', 
                'title' => 'Lins Country Club', 
                'description' => 'Site Lins Country Club',
                'galery'=> [
                            [
                                'title' => '',
                                'img'   => $this->path .'country.jpg', 
                            ],
                            [
                                'title' => '',
                                'img'   => $this->path .'country.png', 
                            ]
                        ],
                'history' => 'Site institucional, com informações dos campeonatos internos, notícias, eventos, mapa dos quiosques reservados e formulário de contato..'
                            
                ];
    }

    private function aguia( $category ){

        $description = $this->description( $category );
        return [ 
                'project' => 'aguia',
                'category' => $category,
                'description_category' => $description,
                'img'   =>  $this->path .'aguia.jpg', 
                'title' => 'Águia Rádio Comando', 
                'description' => 'Site Águia Rádio Comando',
                'galery'=> [
                            [
                                'title' => '',
                                'img'   => $this->path .'aguia.jpg', 
                            ],
                            [
                                'title' => '',
                                'img'   => $this->path .'aguia.png', 
                            ]
                        ],
                'history' => 'Site institucional com listagem de produtos, eventos e formulário de contato.'
                            
                ];
    }

    private function mundodacrianca( $category ){

        $description = $this->description( $category );
        return [ 
                'project' => 'mundodacrianca',
                'category' => $category,
                'description_category' => $description,
                'img'   =>  $this->path .'mundodacrianca.jpg', 
                'title' => 'Mundo da Criança', 
                'description' => 'Site Mundo da Criança',
                'galery'=> [
                            [
                                'title' => '',
                                'img'   => $this->path .'mundodacrianca.jpg', 
                            ],
                            [
                                'title' => '',
                                'img'   => $this->path .'mundodacrianca.png', 
                            ]
                        ],
                'history' => 'Site com listagem de produtos, categorias, marcas e filtro de busca.'
                            
                ];
    }

    private function newdrop( $category ){

        $description = $this->description( $category );
        return [ 
                'project' => 'newdrop',
                'category' => $category,
                'description_category' => $description,
                'img'   =>  $this->path .'newdrop.jpg', 
                'title' => 'Newdrop', 
                'description' => 'Site Newdrop',
                'galery'=> [
                            [
                                'title' => '',
                                'img'   => $this->path .'frankia.jpg', 
                            ],
                            [
                                'title' => '',
                                'img'   => $this->path .'frankia.png', 
                            ]
                        ],
                'history' => 'Site institucional, com listagem de produtos, segmentos, mapa de distribuidores, notícias e formulário de contato.'
                            
                ];
    }

}
