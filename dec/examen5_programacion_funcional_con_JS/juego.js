class Personaje {
    //Propiedades del personaje
    constructor(name, attackSpeed, attackDamage) {
        this.name = name;
        this.attackSpeed = attackSpeed;
        this.attackDamage = attackDamage;
    }

    get getName() {
        return this.name;
    }

    set setName(_name) {
        this.name = _name;
    }

    get getAttackSpeed() {
        return this.attackSpeed;
    }

    set setAttackSpeed(_attackSpeed) {
        this.attackSpeed = _attackSpeed;
    }

    get getAttackDamage() {
        return this.attackDamage;
    }

    set setAttackDamage(_attackDamage) {
        this.attackDamage = _attackDamage;
    }

    //Método del personaje
    atacar = function (funcionAtaque) {
        let ataque = funcionAtaque(this);
        console.log(`${this.name} ataca con ${ataque.weapon}: ${ataque.attackSpeed} velocidad, causa ${ataque.attackDamage}`)
    }
}

//Diferentes armas
const attackWithSword = (personaje) => {
    return {
        weapon: "sword",
        attackSpeed: personaje.attackSpeed + 4,
        attackDamage: personaje.attackDamage + 4,
    }
}

const attackWithHammer = (personaje) => {
    return {
        weapon: "hammer",
        attackSpeed: personaje.attackSpeed - 1,
        attackDamage: personaje.attackDamage + 9,
    }
}

const attackWithBowAndArrow = (personaje) => {
    return {
        weapon: "bow and arrow",
        attackSpeed: personaje.attackSpeed + 7,
        attackDamage: personaje.attackDamage + 2,
    }
}

//Personajes
var legolas = new Personaje("Legolas", 12, 7);
legolas.atacar(attackWithSword);

var gimli = new Personaje("Gimli", 6, 10);
gimli.atacar(attackWithHammer);

var aragon = new Personaje("Aragon", 15, 8);
aragon.atacar(attackWithBowAndArrow);