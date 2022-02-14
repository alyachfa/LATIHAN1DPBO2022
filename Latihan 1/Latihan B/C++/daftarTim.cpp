class daftarTim
{
    private:
        string namaTim;
        string negaraAsal;
        string tahun;
        string pemain[20];
        string pelatih;
     
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

        void setPemain(int i, string pemain){
            this->pemain[i] = pemain;
        }

        string getPemain(int i){
            return this->pemain[i];
        }

        void setPelatih(){
            this->pelatih = pelatih;
        }

        string getPelatih(){
            return this->pelatih;
        }

        ~daftarTim(){

        }
};