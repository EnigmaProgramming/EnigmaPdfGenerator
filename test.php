<?php

require_once 'pdfBootstrap.php';

$pdf = new pdfGenerator(PdfFormats::F_LETTER,PdfOrientation::O_PORTRAIT);

$html = "<html>
  <head>
    <title>This is a test</title>
  </head>
  <body>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, enim.</p>

    <br/>
    <br/>

    <article>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus facilis dolorum sequi dolores repudiandae ut perspiciatis, alias atque ab harum voluptates magni. A quae eveniet nihil dolore itaque fugit voluptas, ipsam, recusandae obcaecati in tempora modi maiores harum possimus animi placeat voluptate pariatur aut cum tenetur beatae dolorum. Vel tenetur recusandae aspernatur fuga atque non, maiores inventore qui necessitatibus repudiandae expedita officiis vitae possimus, nostrum, quos est eos eveniet ipsam similique. Voluptates repellat quas ut repellendus laborum. Impedit nulla corrupti iste fugiat fuga repudiandae ratione culpa eum, nemo id ullam consectetur sapiente recusandae architecto, error quos consequuntur provident asperiores porro!</p>
    </article>

    <article>
      <table>
        <thead>
          <th>Column 1</th>
          <th>Column 2</th>
          <th>Column 3</th>
          <th>Column 4</th>
          <th>Column 5</th>
        </thead>
        <tbody>
          <tr>
            <td>Item 1-1</td>
            <td>Item 1-2</td>
            <td>Item 1-3</td>
            <td>Item 1-4</td>
            <td>Item 1-5</td>
          </tr>
          <tr>
            <td>Item 2-1</td>
            <td>Item 2-2</td>
            <td>Item 2-3</td>
            <td>Item 2-4</td>
            <td>Item 2-5</td>
          </tr>
          <tr>
            <td>Item 3-1</td>
            <td>Item 3-2</td>
            <td>Item 3-3</td>
            <td>Item 3-4</td>
            <td>Item 3-5</td>
          </tr>
          <tr>
            <td>Item 4-1</td>
            <td>Item 4-2</td>
            <td>Item 4-3</td>
            <td>Item 4-4</td>
            <td>Item 4-5</td>
          </tr>
          <tr>
            <td>Item 5-1</td>
            <td>Item 5-2</td>
            <td>Item 5-3</td>
            <td>Item 5-4</td>
            <td>Item 5-5</td>
          </tr>
        </tbody>
      </table>
    </article>
  </body>
</html>";

//pdf->setDisplayString($displayString);

$pdf->createHtml($html);

$pdf->outputFileToBrowser();

//$pdf->display();