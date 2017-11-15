<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html" encoding="UTF-8" indent="yes"/>
    <xsl:template match="/">
        <html>
            <head>
                <meta name="author" content="Iván González Mahagamage"/>
                <meta name="description"
                      content="Tarea 3 del ejercicio 2 de la práctica 04 asignatura Software y Estándares para la Web"/>
                <meta name="keywords" content="Tarea1,SEW,Práctica04,ejercicio2,Software,Estándares,Web"/>
                <title>Práctica 04 | Software y Estándares para la Web</title>
                <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"/>
                <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet"/>
                <link rel="icon" type="image/x-icon"
                      href="https://unioviedo-my.sharepoint.com/personal/uo239795_uniovi_es/_layouts/15/guestaccess.aspx?docid=1b184fdc380484a7bbdad079aa2a52135&amp;authkey=ATTjsDQ1WDwFg-XqhaEbSF4&amp;e=168190abc0264416a06fc92675ca41aa"/>
                <link rel="stylesheet" type="text/css" href="../../../../style/navDesplegable.css"/>
                <link rel="stylesheet" type="text/css" href="../../../../style/style.css"/>
                <link rel="stylesheet" type="text/css" href="../../../../style/practica04.css"/>
                <script type="text/javascript" src="../../../../scripts/jquery.js"></script>
                <script type="text/javascript" src="../../../../scripts/script.js"></script>
            </head>
            <body>
                <header>
                    <h1>Práctica 04 - Ejercicio 2 - Tarea 03</h1>
                </header>
                <main>
                    <xsl:for-each select="recetas/receta">
                        <xsl:for-each select="ingredientes/ingrediente">
                            <xsl:if test="contains(nombreIngrediente, 'Pollo')">
                                <section>
                                    <h2>
                                        <xsl:value-of select="../../nombre"/>
                                    </h2>
                                    <h3>Dificultad :</h3>
                                    <p>
                                        <xsl:value-of select="../../@dificultad"/>
                                    </p>
                                    <h3>Tipo de plato:</h3>
                                    <p>
                                        <xsl:value-of select="../../@tipoPlato"/>
                                    </p>
                                    <h3>Ingredientes</h3>
                                    <ul>
                                        <xsl:for-each select="../../ingredientes/ingrediente">
                                            <li>
                                                <xsl:value-of select="nombreIngrediente"/>
                                                -
                                                <xsl:value-of select="cantidad"/>
                                            </li>
                                        </xsl:for-each>
                                    </ul>
                                    <h3>Calorias</h3>
                                    <p>
                                        <xsl:value-of select="../../calorias"/>
                                    </p>
                                    <h3>Elaboración</h3>
                                    <ol>
                                        <xsl:for-each select="../../elaboración/paso">
                                            <li>
                                                <xsl:value-of select="."/>
                                            </li>
                                        </xsl:for-each>
                                    </ol>
                                    <h3>Tiempo de elaboración</h3>
                                    <p>
                                        <xsl:value-of select="../../tiempo"/>
                                    </p>
                                    <h3>Utensilios</h3>
                                    <ul>
                                        <xsl:for-each select="../../utensilios/utensilio">
                                            <li>
                                                <xsl:value-of select="."/>
                                            </li>
                                        </xsl:for-each>
                                    </ul>
                                    <h3>Origen</h3>
                                    <a href="{//origen}">
                                        <xsl:value-of select="../../origen"/>
                                    </a>
                                </section>
                            </xsl:if>
                        </xsl:for-each>
                    </xsl:for-each>
                </main>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>