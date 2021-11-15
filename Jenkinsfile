pipeline {
  agent any
     
  stages {
  
    stage('Build') {
      steps {
        sh 'cd apache2 && /Applications/Docker.app/Contents/Resources/bin/docker build -t abhishekjha95/php-web-app .'
        sh 'cd mysql && /Applications/Docker.app/Contents/Resources/bin/docker build -t abhishekjha95/mysql-web-app .'
      }
    }  
    
            
    stage('Deploy') {
      steps {
       sh '/Applications/Docker.app/Contents/Resources/bin/docker rm -f myDB webapp'
       sh '/Applications/Docker.app/Contents/Resources/bin/docker run -d --network=host --name myDB -e MYSQL_USER=abhishek -e MYSQL_DATABASE=guest -e MYSQL_ROOT_PASSWORD=abhishek@123 -e MYSQL_PASSWORD=abhishek@123 abhishekjha95/mysql-web-app'
       sh '/Applications/Docker.app/Contents/Resources/bin/docker run -d -p 8081:80 --network=host  --name webapp -e MYSQL_USER=abhishek -e MYSQL_DATABASE=guest -e MYSQL_HOST=myDB -e MYSQL_PASSWORD=abhishek@123 abhishekjha95/php-web-app'
        
      }
    }
  }
}
