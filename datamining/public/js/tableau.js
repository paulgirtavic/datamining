var viz;


//Tableau JS API calling the Dashboard from Tableau Server

function initViz() {
    var containerDiv = document.getElementById("vizContainer"),
        url = "https://public.tableau.com/views/responsiveLastTry/Dashboard2?:embed=y&:display_count=yes",
        options = {
            hideTabs: true,
            hideToolbar: true,
            showShareOptions: false,
            width: "800px",
            height: "700px",

        };



    viz = new tableau.Viz(containerDiv, url, options);
    // Create a viz object and embed it in the container div.
}



// Function to download a pdf
function exportToPDF() {
    viz.showExportPDFDialog();
}
// Function to download as imgae
function exportImage() {
    viz.showExportImageDialog();
}

function exportCrossTab() {
    viz.showExportCrossTabDialog();
}