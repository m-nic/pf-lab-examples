function output(message) {
    console.log(message);
}

function vSpace(n) {
    for (let i = 0; i < n; i++) {
        console.log("\n");
    }
}

class Vehicle {
    maxSpeed;
    wheels;

    _speed = 0;

    constructor(maxSpeed) {
        this.maxSpeed = maxSpeed;
    }

    accelerate() {
        if (this._speed <= this.maxSpeed) {
            this._speed++;
        }
    }

    decelerate() {
        if (this._speed > 0) {
            this._speed--;
        }
    }

    isStopped() {
        return this._speed === 0;
    }

    isMoving() {
        return !this.isStopped();
    }

    makeNoise() {
        output('BEEEP');
    }
}


let vehicle = new Vehicle(1);

if (vehicle.isStopped()) {
    output("vehicul oprit");
}

vehicle.accelerate();

if (vehicle.isMoving()) {
    output("vehicul in miscare");
}

vehicle.makeNoise();

output("Viteza maxima:" + vehicle.maxSpeed);

vSpace(3);


class Bicycle extends Vehicle {
    wheels = 2;

    makeNoise() {
        output("HOONK HOONK");
    }
}

let bike = new Bicycle(5);

if (bike.isStopped()) {
    output("bicicleta oprita");
}

bike.accelerate();

if (bike.isMoving()) {
    output("bicicleta in miscare");
}

bike.makeNoise();
output("Viteza maxima:" + bike.maxSpeed);

vSpace(3);

class Car extends Vehicle {
    wheels = 4;

    accelerate() {
        if (this._speed <= this.maxSpeed) {
            this._speed += 10;
        }
    }

    decelerate() {
        if (this._speed > 0) {
            this._speed -= 10;
        }
    }

    makeNoise() {
        output("TEEET TEEET");
    }
}


let car = new Car(150);

if (car.isStopped()) {
    output("masina oprita");
}

car.accelerate();

if (car.isMoving()) {
    output("masina in miscare");
}

car.makeNoise();
output("Viteza maxima:" + car.maxSpeed);