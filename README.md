# MintHCM Stack
1. Clone with `--recurse-submodules`:
    ```sh
    git clone --recurse-submodules git@gitlab.com:TisaLabs/CompanyHRM.git -b minthcm-3.5.1
    ```
1. Copy the `mhcm` folder over to `minthcm`: (this is to avoid creating a file permission mess in Git)
    ```sh
    cp -a ./mhcm ./minthcm
    ```
1. Give the `minthcm` folder appropriate permissions:
    ```sh
    # uid/gid 33 = www-data on Debian systems
    setfacl -R -m"u:33:rwx" ./MintHCM
    setfacl -R -m"g:33:rwx" ./MintHCM
    ```
1. Deploy and enjoy:
    ```sh
    docker compose up
    ```
    The application will be available to you at http://localhost:8080/MintHCM. Use `db` as the database server hostname, and `root` for both the username and the password.
