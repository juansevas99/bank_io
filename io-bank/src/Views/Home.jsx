import React from 'react'

const Home = () => {
  return (
    <div className="container-fluid">
      <div className="row mt-5">
        <div className="col-md-8 offset-md-2">
          <div className="card border border-dark">
            <div className="card-header bg-dark text-white">
              <h2 className="text-center">¡Bienvenido a IO Bank!</h2>
            </div>
            <div className="card-body">
              {/* Banner */}
              <div className="alert" role="alert">
                <img
                  src="https://images.pexels.com/photos/730547/pexels-photo-730547.jpeg?auto=compress&cs=tinysrgb&w=300"
                  alt="IO Bank"
                  className="img-fluid mb-3 w-100"
                />
                <p>
                  <strong>¡Oferta Especial!</strong> Abre una cuenta hoy y obtén beneficios exclusivos. ¡No te pierdas esta oportunidad!
                </p>
              </div>
              <p className="lead">
                En IO Bank, nos enorgullece ofrecer a nuestros clientes una experiencia bancaria excepcional. Con una amplia gama de servicios y la conveniencia de la banca en línea, hacemos que administrar tus finanzas sea simple y sin complicaciones.
              </p>
              <p>
                Ya sea que estés buscando una cuenta de ahorros para tus metas financieras, un préstamo para tu nuevo hogar o asesoramiento financiero personalizado, en IO Bank estamos aquí para ayudarte a alcanzar tus objetivos.
              </p>
              <p>
                Navega por nuestro sitio para descubrir todas las funciones disponibles. ¡Esperamos poder servirte y hacerte parte de la familia IO Bank!
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  )
}

export default Home