function isRelation(set1, relation)
{
    for(let i = 0; i < set1.length; i++)
    {
        let meetingCount = 0;
        for(let j = 0; j < relation.length; j++)
        {
            if(set1[i] === relation[j][0])
            {
                meetingCount++;
                if(meetingCount > 1)
                    return false;
            }
        }
    }
    return true;
}


function calculate()
{
    let set1 = document.getElementById('set1').value.split(" ");
    let set2 = document.getElementById('set2').value.split(/\n| |,|/);
    let relation = document.getElementById('relation').value.split(', ');
    let output = document.getElementById('output');

    for(let i = 0; i < relation.length; i++)
        relation[i] = relation[i].split(' ');
    let error_flag = 0;

    if(set1.length === 0 || set2.length === 0 || relation.length === 0)
    {
        error_flag = 4;
    }
    else
    {
        for(let i = 0; i < relation.length; i++)
        {
            let isSet1Meeted = false;
            for(let j = 0; j < set1.length; j++)
                if(relation[i][0] === set1[j])
                {
                    isSet1Meeted = true;
                    break;
                }

            let isSet2Meeted = false;
            for(let j = 0; j < set2.length; j++)
                if(relation[i][1] === set2[j])
                {
                    isSet2Meeted = true;
                    break;
                }

            if(!isSet1Meeted && !isSet2Meeted )
                error_flag = 3;
            else if(!isSet2Meeted)
                error_flag = 2;
            else if(!isSet1Meeted)
                error_flag = 1;
        }
    }

    if(error_flag === 4)
        output.innerText = "You should fill all fields"
    else if(error_flag === 3)
        output.innerText = "Some elements are missing from set 1 and set 2"
    else if(error_flag === 1)
        output.innerText = "Some elements are missing from set 1"
    else if(error_flag === 2)
        output.innerText = "Some elements are missing from set 2"

    else if(error_flag === 0)
        if(isRelation(set1, relation))
            output.innerText = "This is functional relation";
        else
            output.innerText = "This is NOT functional relation";
}