
# Setup Kubernetes to connect to the Cloud SQL instance

[Link to Docs](https://cloud.google.com/sql/docs/mysql/connect-container-engine)

- Enable Cloud SQL API

[Link to UI](https://console.cloud.google.com/flows/enableapi?apiid=sqladmin)

- Create Service Account

[Link to UI](https://console.cloud.google.com/iam-admin/serviceaccounts/)

As Role select Cloud SQL > Cloud SQL Client.
Select "Furnish a new private key" with JSON format.
Download your private key.

- Create a custom User for access via the Container Engine Cluster

[Link to UI](https://console.cloud.google.com/sql/instances) select your database -> Access Control -> Users
Create a user "kubernetes" and choose a password.

- Register the Private Key as a secret in the Container Engine Cluster
> kubectl create secret generic cloudsql-instance-credentials --from-file=credentials.json=downloaded-privatekey.json

- Register User/Password as a secrets in the Container Engine Cluster
> kubectl create secret generic cloudsql --from-literal=username=kubernetes --from-literal=password=kubernetes

- List saved secrets for control
> kubectl get secrets

