<?php

// Create the controller class for the Mvc design pattern
class Controller
{
    // Declare public variables for the controller class
    public $load;
    public $model;

    // Constructor of the class with a parameter for the page URI
    function __construct($pageURI = null)
    {
        // Create new objects for Load and Model
        $this->load = new Load();
        $this->model = new Model();

        $this->$pageURI();
    }

    // Home page function
    function home()
    {
        $this->load->view('indexView');
    }

    // API endpoint to create a database table
    function apiCreateTable()
    {
        $data = $this->model->dbCreateTable(); // Corrected from 'dbCreateTable()' to match the method name
        $this->load->view('viewMessage', $data);
    }

    // API endpoint to insert data into the database
    function apiInsertData()
    {
        $data = $this->model->dbInsertData(); // Corrected from 'dbInsertData()' to match the method name
        $this->load->view('viewMessage', $data);
    }

    // API endpoint to get data from the database
    function apiGetData()
    {
        $data = $this->model->dbGetData(); // Corrected from 'dbGetData' to match the method name
        $this->load->view('view3DAppData', $data);
    }


    function dbCreateTable()
    {
        // Function to create a database table
        echo "Create table function";
    }

    function dbInsertData()
    {
        // Function to insert data into the database
        echo "Data insertion function";
    }

    function dbGetData()
    {
        // Function to retrieve data from the database
        echo "Data retrieval function";
    }

    // Method to get Flickr service data using AJAX
    function apiGetFlickrService() {
        // Load the view that interacts with the Flickr service
        $this->load->view('viewFlickrService');
    }

    function apiGetJson() {
        $this->load->view('viewJson');
    }

    function apiLoadImage() {
        $data = $this->model->dbGetBrand();
        $this->load->view('viewDrinks', $data);
    }

    function hook() {
        $this->load->view('hook');
    }

}

?>