<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html" encoding="UTF-8" indent="yes"/>
    <xsl:template match="/">
        <html>
            <head>
                <meta name="author" content="Iván González Mahagamage"/>
                <meta name="description"
                      content="Tarea 3 del ejercicio 1 de la práctica 04 asignatura Software y Estándares para la Web"/>
                <meta name="keywords" content="Tarea1,SEW,Práctica04,ejercicio1,Software,Estándares,Web"/>
                <title>Práctica 04 | Software y Estándares para la Web</title>
                <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"/>
                <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet"/>
                <link rel="icon" type="image/x-icon"
                      href="https://unioviedo-my.sharepoint.com/personal/uo239795_uniovi_es/_layouts/15/guestaccess.aspx?docid=1b184fdc380484a7bbdad079aa2a52135&amp;authkey=ATTjsDQ1WDwFg-XqhaEbSF4&amp;e=168190abc0264416a06fc92675ca41aa"/>
                <link rel="stylesheet" type="text/css" href="../../../../style/navDesplegable.css"/>
                <link rel="stylesheet" type="text/css" href="../../../../style/style.css"/>
                <link rel="stylesheet" type="text/css" href="../../../../style/practica04.css"/>
                <script type="text/javascript" src="../../../../scripts/jquery.js"/>
                <script type="text/javascript" src="../../../../scripts/script.js"/>
            </head>
            <body>
                <header>
                    <h1>Práctica 04 - Ejercicio 1 - Tarea 03</h1>
                </header>
                <main>
                    <xsl:for-each select="articulos/articulo">
                        <xsl:sort select="año" order="ascending"/>
                        <xsl:if test="año > 2011">
                            <section>
                                <h2>
                                    <xsl:value-of select="titulo"/>
                                </h2>
                                <h3>Autores:</h3>
                                <ul>
                                    <xsl:for-each select="autores/autor">
                                        <li>
                                            <xsl:value-of select="nombreAutor"/> -
                                            <a href="mailto:{//correo}">
                                                <xsl:value-of select="correo"/>
                                            </a>
                                        </li>
                                    </xsl:for-each>
                                </ul>
                                <h3>Resumen:</h3>
                                <p>
                                    <xsl:value-of select="resumen"/>
                                </p>
                                <h3>Palabras clave</h3>
                                <ul>
                                    <xsl:for-each select="claves/clave">
                                        <li>
                                            <xsl:value-of select="."/>
                                        </li>
                                    </xsl:for-each>
                                </ul>
                                <h3>Revista</h3>
                                <p>
                                    <xsl:value-of select="revista"/>
                                </p>
                                <h3>Enumeración de la revista</h3>
                                <xsl:for-each select="enumeracionRevista">
                                    <xsl:if test="volumenRevista > 0">
                                        <h4>Volumen:</h4>
                                        <p>
                                            <xsl:value-of select="volumenRevista"/>
                                        </p>
                                    </xsl:if>
                                    <xsl:if test="numeroRevista > 0">
                                        <h4>Número:</h4>
                                        <p>
                                            <xsl:value-of select="numeroRevista"/>
                                        </p>
                                    </xsl:if>
                                </xsl:for-each>

                                <h3>Página de inicio</h3>
                                <p>
                                    <xsl:value-of select="paginaInicio"/>
                                </p>
                                <h3>Página Final</h3>
                                <p>
                                    <xsl:value-of select="paginaFinal"/>
                                </p>
                                <h3>Año</h3>
                                <p>
                                    <xsl:value-of select="año"/>
                                </p>
                            </section>
                        </xsl:if>
                    </xsl:for-each>
                </main>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
