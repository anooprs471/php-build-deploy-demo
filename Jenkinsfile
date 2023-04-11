pipeline {
  agent { label 'ec2-ubuntu-slave' }
  
  environment{
    DOCKER_USERNAME = credentials('DOCKER_USERNAME')
    DOCKER_PASSWORD = credentials('DOCKER_PASSWORD')
  }
  stages {
    stage('Fetch') {
      steps {
        git(branch: 'main', url: 'https://github.com/anooprs471/php-build-deploy-demo.git')
      }
    }

    stage('docker login') {
		steps{
			sh(script: """
            docker login -u $DOCKER_USERNAME -p $DOCKER_PASSWORD
			""", returnStdout: true) 
		}
    }

    stage('Build-Image') {
      steps {
        sh '''
        pack build phppot-event --path . --buildpack paketo-buildpacks/php --builder paketobuildpacks/builder:full
        '''
      }
    }
	
    stage('docker push') {
		steps{
			sh(script: """
            docker push anooprs471/phppot-event:${BUILD_NUMBER}
			""")
		}
    }

    stage('Deploy App to Kubernetes') {     
      steps {
          withCredentials([file(credentialsId: 'mykubeconfig', variable: 'KUBECONFIG')]) {
            sh 'sed -i "s/<TAG>/${BUILD_NUMBER}/" app.yaml'
            sh 'kubectl apply -f app.yaml'
          }
      }
    }

  }
}
