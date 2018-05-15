<html>
  <head>
    <style>
      table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
      }

      td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
      }

      tr:nth-child(even) {
        background-color: #dddddd;
      }
    </style>
    <title>Calendarios</title>
  </head>
  <body>
    <h1>Mis calendarios de Google son:</h1>
    <table>
      <tr>
        <th>Nombre</th>
        <th>ID</th>
      </tr>
      {% for each in items %}
      <tr>
        <td><a href="{{ "/Calendar?id=" ~ each['id'] }}">{{each['summary']}}</a></td>
        <td>{{each['id']}}</td>
      </tr>
      {% endfor %}
    </table>
  </body>
</html>
