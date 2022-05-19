function check() {
    /**
    * Вычисление размерности матрицы с помощью метода split
    */
    let matrix = document.getElementById("matrica").value.split("\n");
    let matrix_width = matrix[0].split(" ").length;
    let validation_flag = 0;
    /**
    * Заполнение двумерного массива
    */
    for (let i = 0; i < matrix.length; i++) {
        let split = matrix[i].split(" ");

        for (let j = 0; j < split.length; j++) {
            if(!(split[j] == 0 || split[j] == 1)) {
                validation_flag = 1;
            }
        }

        if(split.length != matrix_width) {
            validation_flag = 2;
        }
    }

    if (validation_flag == 0) {
        let validation_y = true;
        for (let i = 0; i < matrix.length; i++) {
            let validation_x = 0;
            let split = matrix[i].split(" ");
            for (let j = 0; j < matrix_width; j++) {
                if (split[j] == 1) {
                    validation_x++;
                }
            }
            if (validation_x != 1) {
                validation_y = false;
            }
            if (validation_y) {
                document.getElementById("Result").innerHTML = "Relation is functional.";
            }
            else {
                document.getElementById("Result").innerHTML = "Relation is not functional.";
            }
        }
    }
    /**
    * Валидация введённой пользователем информации
    */
    else if (validation_flag == 1) {
        alert("There could be only binary values in matrix")
    }
    else {
        alert("Matrix is not rectangle")
    }
}
