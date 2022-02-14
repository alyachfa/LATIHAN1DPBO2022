class daftarTim
{
    private:
        string namaTim;
        string negaraAsal;
        string tahun;
        string pemain;
     
    public:
        daftarTim(){

        }

        void setNamaTim(string namaTim){
            this->namaTim = namaTim;
        }

        string getNamaTim(){
            return this -> namaTim;
        }

        void setNegaraAsal(string negaraAsal){
            this->negaraAsal = negaraAsal;
        }

        string getNegaraAsal(){
            return this->negaraAsal;
        }

        void setTahun(){
            this->tahun = tahun;
        }

        string getTahun(){
            return this->tahun;
        }

        void setPemain(){
            this->pemain = pemain;
        }

        string getPemain(){
            return this->pemain;
        }



        ~daftarTim(){

        }
};
