<!-- This Whole page is a showcase of Javascript API, it was the first choice solution for this project
 although due responsiveness issue had to stick with Iframe embed option -->


<!DOCTYPE html>
<html>

<head>
    <title>Export to PDF</title>

    <script type="text/javascript"
            src="https://public.tableau.com/javascripts/api/tableau-2.min.js"></script>
    <script type="text/javascript">

    </script>
    <script src="{{ asset('js/tableau.js') }}"></script>
</head>

<body onload="initViz();">
<div id="vizContainer" style="width:1980x, height:1080px"></div>
<button onclick="exportToPDF();">Export</button>
<button onclick="exportImage();">Export as IMG</button>
<button onclick="showExportCrossTabDialog();">Export as CSV</button>

</body>

</html>