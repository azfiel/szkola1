#include <iostream>
#include <string>

class Maszyna {
public:
    Maszyna(std::string typ) : typ(typ) {}

    virtual void uruchom() {
        std::cout << "Maszyna uruchamia silniki.\n";
    }

    virtual ~Maszyna() {}

protected:
    std::string typ;
};

class MaszynaWojskowa : public Maszyna {
public:
    MaszynaWojskowa(std::string typ) : Maszyna(typ) {}

    void uruchom() override {
        std::cout << "Maszyna wojskowa uruchamia silniki i uzbrojenie.\n";
    }
};

int main() {
    Maszyna* obiekt1 = new Maszyna("ModelA");
    Maszyna* obiekt2 = new MaszynaWojskowa("ModelB");

    obiekt1->uruchom();
    obiekt2->uruchom();

    delete obiekt1;
    delete obiekt2;

    return 0;
}
