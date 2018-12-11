
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Actividad 2 Tema 4 - Ejercicios PHP</title>

  </head>
  <body>
<form class="" action="0" method="post">



  <form class="" name="formulario_curp" action="curp.php" action="formulario.php" method="post">

    <h1>Obtener CURP</h1>

    <label for="">Nombre</label> <input type="text" name="caja_nombre" value="Marco">
    <br>
    <label for="">Apellido Paterno</label> <input type="text" name="caja_primerApellido" value="Villegas">
    <br>
    <label for="">Apellido Materno</label> <input type="text" name="caja_segundoApellido" value="Ulloa">
    <br>
    <label for="">Fecha de nacimiento: Año</label>
    <select class="" name="comboBox_año">

      <option value="18">2018</option>
      <option value="17">2017</option>
      <option value="16">2016</option>
      <option value="15">2015</option>
      <option value="14">2014</option>
      <option value="13">2013</option>
      <option value="12">2012</option>
      <option value="11">2011</option>
      <option value="10">2010</option>
      <option value="09">2009</option>
      <option value="08">2008</option>
      <option value="07">2007</option>
      <option value="06">2006</option>
      <option value="05">2005</option>
      <option value="04">2004</option>
      <option value="03">2003</option>
      <option value="02">2002</option>
      <option value="01">2001</option>
      <option value="00">2000</option>
      <option value="99">1999</option>
      <option value="98">1998</option>
      <option value="97">1997</option>
      <option value="96">1996</option>
      <option value="95">1995</option>
      <option value="94">1994</option>
      <option value="93">1993</option>
      <option value="92">1992</option>
      <option value="91">1991</option>
      <option value="90">1990</option>
      <option value="89">1989</option>
      <option value="88">1988</option>
      <option value="87">1987</option>
      <option value="86">1986</option>
      <option value="85">1985</option>
      <option value="84">1984</option>
      <option value="83">1983</option>
      <option value="82">1982</option>
      <option value="81">1981</option>
      <option value="80">1980</option>
      <option value="79">1979</option>
      <option value="78">1978</option>
      <option value="77">1977</option>
      <option value="76">1976</option>
      <option value="75">1975</option>
      <option value="74">1974</option>
      <option value="73">1973</option>
      <option value="72">1972</option>
      <option value="71">1971</option>
      <option value="70">1970</option>
      <option value="69">1969</option>
      <option value="68">1968</option>
      <option value="67">1967</option>
      <option value="66">1966</option>
      <option value="65">1965</option>
      <option value="64">1964</option>
      <option value="63">1963</option>
      <option value="62">1962</option>
      <option value="61">1961</option>
      <option value="60">1960</option>
      <option value="59">1959</option>
      <option value="58">1958</option>
      <option value="57">1957</option>
      <option value="56">1956</option>
      <option value="55">1955</option>
      <option value="54">1954</option>
      <option value="53">1953</option>
      <option value="52">1952</option>
      <option value="51">1951</option>
      <option value="50">1950</option>
    </select>

    <label for=""> Mes</label>

    <select class="" name="comboBox_mes">
      <option value="01">Enero</option>
      <option value="02">Febrero</option>
      <option value="03">Marzo</option>
      <option value="04">Abril</option>
      <option value="05">Mayo</option>
      <option value="06">Junio</option>
      <option value="07">Julio</option>
      <option value="08">Agosto</option>
      <option value="09">Septiembre</option>
      <option value="10">Octubre</option>
      <option value="11">Noviembre</option>
      <option value="12">Diciembre</option>
    </select>

    <label for=""> Dia</label>
    <select class="" name="comboBox_dia">
      <option value="01">01</option>
      <option value="02">02</option>
      <option value="03">03</option>
      <option value="04">04</option>
      <option value="05">05</option>
      <option value="06">06</option>
      <option value="07">07</option>
      <option value="08">08</option>
      <option value="09">09</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
      <option value="21">21</option>
      <option value="22">22</option>
      <option value="23">23</option>
      <option value="24">24</option>
      <option value="25">25</option>
      <option value="26">26</option>
      <option value="27">27</option>
      <option value="28">28</option>
      <option value="29">29</option>
      <option value="30">30</option>
      <option value="31">31</option>
    </select>
    <br>

    <label for="">Sexo</label>
    <select class="" name="comboBox_sexo">
      <option value="H">Hombre</option>
      <option value="M">Mujer</option>
    </select>

    <br>

    <label for=""> Estado de nacimiento</label>

    <select class="" name="comboBox_estado">
      <option value="AS">Aguascalientes</option>
      <option value="BN">Baja California</option>
      <option value="BR">Baja California Sur</option>
      <option value="CC">Campeche</option>
      <option value="CS">Chiapas</option>
      <option value="CH">Chihuahua</option>
      <option value="CL">Coahuila</option>
      <option value="CM">Colima</option>
      <option value="DF">Distrito Federal</option>
      <option value="DG">Durango</option>
      <option value="GT">Guanajuato</option>
      <option value="GR">Gerrero</option>
      <option value="HG">Hidalgo</option>
      <option value="JC">Jalisco</option>
      <option value="MC">Mexico</option>
      <option value="MN">Michoacan</option>
      <option value="MS">Morelos</option>
      <option value="NT">Nayarit</option>
      <option value="NL">Nuevo Leon</option>
      <option value="OC">Oaxaca</option>
      <option value="PL">Puebla</option>
      <option value="QT">Queretaro</option>
      <option value="QR">Quintana Roo</option>
      <option value="SL">Sinaloa</option>
      <option value="SR">Sonora</option>
      <option value="TC">Tabasco</option>
      <option value="TS">Tamaulipas</option>
      <option value="TL">Tlaxcala</option>
      <option value="VZ">Vereacruz</option>
      <option value="TN">Yucatan</option>
      <option value="ZS">Zacatecas</option>
    </select>
    <br>
    <input type="submit" name="submit_curp" value="Sacar CURP" onclick="php_curp()">
    <br>
    <label for="">CURP:</label> <input type="text" name="caja_curp" value="">

      <h1>Convertir Numero en Decimal</h1>

      <label for="">Numero Decimal: </label> <input type="text" name="caja_decimal" value="">
      <br>
      <button type="button" name="button" onclick="conversion()">Convertir</button>
      <br>
      <label for="">Binario: </label> <input type="text" name="caja_binario" value="" disabled>
      <br>
      <label for="">Octal: </label> <input type="text" name="caja_octal" value="" disabled>
      <br>
      <label for="">Hexadecimal: </label> <input type="text" name="caja_hexadecimal" value="" disabled>

      <h1>Lectura de Cadenas</h1>

      <label for="">Cadena:</label> <input type="text" name="caja_Texto" value="">
      <br>
      <button type="button" name="button" onclick="cadenas()">Evaluar</button>
      <br>
      <label for="">Vocales: </label> <input type="text" name="caja_vocales" value="" disabled>
      <br>
      <label for="">Consonantes: </label> <input type="text" name="caja_consonantes" value="" disabled>
      <br>
      <label for="">Repeticiones: </label> <input type="text" name="caja_repeticiones" value="" disabled>
      <br>
      <label for="">Cadena Loca: </label> <input type="text" name="caja_loca" value="" disabled>

</form>
  </body>
</html>
