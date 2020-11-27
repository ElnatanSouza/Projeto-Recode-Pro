import React from 'react';

import './styles.css';

const Produtos = () => {
    const [produto, setProduto] = React.useState([])

    React.useEffect(async () => {
        const url = "http://localhost/fullstack_eletro/src/backend/prod.php";
        const response = await fetch(url);
        setProduto(await response.json());
    }, [])

    let destaque = (event) => {
        if (event.target.style.width === "260px") {
            event.target.style.width = "120px";
        }
        else {
            event.target.style.width = "260px";
        }
    }

    let redimensiona = (event) => {
        if (event.target.style.width === "120px") {
            event.target.style.width = "260px";
        }
        else {
            event.target.style.width = "120px";
        }
    }

    return (
        <>
            <div className="container-fluid mt-5 row">
                    <aside className="col-lg-3">
                        <p className="paragrafoCateg"> Categorias </p>
                        <br />
                        <ul className="lista navbar-nav ml-auto">
                            <li className="nav-item" onClick="exibirTodos()"> Todos (12) </li>
                            <li className="nav-item" onClick="exibir('geladeira')"> Geladeiras (3) </li>
                            <li className="nav-item" onClick="exibir('fogao')"> Fogões (2) </li>
                            <li className="nav-item" onClick="exibir('microondas')"> Microondas (3) </li>
                            <li className="nav-item" onClick="exibir('lavaRoupa')"> Lavadoura de roupa (2) </li>
                            <li className="nav-item" onClick="exibir('lavaLouca')"> Lava-louças (2) </li>
                        </ul>
                    </aside>
                    <div className="col-lg-9">
                        <div className="row">
                            {produto.map(element => {
                                return (
                                    <div key={element.id_produto} className="card border-0 col-lg-3" id="geladeira">
                                        <img id="imgProd" className="tamanhoprod border-0 img-thumbnail" src={"/img/" + element.imagem} onMouseOver={destaque}
                                            onMouseOut={redimensiona} />
                                        <br />
                                        <p className="card-text"> {element.descricao_produto + " " + element.marca} </p>
                                        <br />
                                        <p className="strike"> R$ {element.preco_real}  </p>
                                        <br />
                                        <p className="preco"> R$ {element.preco_desc}  </p>
                                    </div>
                                )
                            })}
                        </div>
                    </div>                    
                    <hr />                 
            </div>
            <hr />

        </>
    );
}

export default Produtos;
