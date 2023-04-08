var http = require("http");
var fs= require("fs");
var path=require("path");

http.createServer(function (request, response) {
   
 
   
   console.log(request.url);
   if(request.url=="/order.html")
   {
    fs.readFile('order.html',function(error,result){

        if(error)
        {
            response.writeHead(404);
            response.write("Page Not Found");
        }
        else
        {
            response.writeHead( 200, {'Content-Type': 'text/html'});
            response.write(result);
        }
    
        response.end();

    });

   }
   
   else if(request.url=="/admin.html")
   {
    fs.readFile('admin.html',function(error,result){

        if(error)
        {
            response.writeHead(404);
            response.write("Page Not Found");
        }
        else
        {
            response.writeHead( 200, {'Content-Type': 'text/html'});
            response.write(result);
        }
    
        response.end();

    });

   }
   else if(request.url=="/customer.html")
   {
    fs.readFile('customer.html',function(error,result){

        if(error)
        {
            response.writeHead(404);
            response.write("Page Not Found");
        }
        else
        {
            response.writeHead( 200, {'Content-Type': 'text/html'});
            response.write(result);
        }
    
        response.end();

    });

   }
   else if(request.url=="/viewItem.html")
   {
    fs.readFile('viewItem.html',function(error,result){

        if(error)
        {
            response.writeHead(404);
            response.write("Page Not Found");
        }
        else
        {
            response.writeHead( 200, {'Content-Type': 'text/html'});
            response.write(result);
        }
    
        response.end();

    });

   }
   else if(request.url=="/addItem.html")
   {
    fs.readFile('addItem.html',function(error,result){

        if(error)
        {
            response.writeHead(404);
            response.write("Page Not Found");
        }
        else
        {
            response.writeHead( 200, {'Content-Type': 'text/html'});
            response.write(result);
        }
    
        response.end();

    });

   }
   else if(request.url=="/addItem.html")
   {
    fs.readFile('addItem.html',function(error,result){

        if(error)
        {
            response.writeHead(404);
            response.write("Page Not Found");
        }
        else
        {
            response.writeHead( 200, {'Content-Type': 'text/html'});
            response.write(result);
        }
    
        response.end();

    });

   }
   else if(request.url=="/orderDetail.html")
   {
    fs.readFile('orderDetail.html',function(error,result){

        if(error)
        {
            response.writeHead(404);
            response.write("Page Not Found");
        }
        else
        {
            response.writeHead( 200, {'Content-Type': 'text/html'});
            response.write(result);
        }
    
        response.end();

    });

   }
   
   else if(request.url.match("\.css$"))
   {
       console.log(request.url);
    var cssPath=path.join(__dirname,'/',request.url);
    var fileStream=fs.createReadStream(cssPath, "UTF-8");
    response.writeHead(200,{"Content-Type" : "text/css"});
    fileStream.pipe(response);
    console.log(cssPath);
   }
   else if(request.url.match("\.jpg$"))
    {
       var imagePath=path.join(__dirname,'/',request.url);
       var fileStream=fs.createReadStream(imagePath);  
       response.writeHead(200,{"Content-Type" : "image/jpg"});
       fileStream.pipe(response);
       console.log(imagePath);
    }
   else
   {

   
    fs.readFile('login.html',function(error,result){

        if(error)
        {
            response.writeHead(404);
            response.write("Page Not Found");
        }
        else
        {
            response.writeHead( 200, {'Content-Type': 'text/html'});
            response.write(result);
        }
    
        response.end();

    });
   }     
   
}).listen(5000);


console.log('Server running at http://127.0.0.1:5000/');