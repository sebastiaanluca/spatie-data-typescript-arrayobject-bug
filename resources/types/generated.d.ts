declare namespace App {
export type NestedData = {
title: string;
};
export type PostData = {
title: string;
content: string;
array1: Array<string>;
array2: Array<string>;
array3: { [key: string]: string };
array4: { [key: number]: string };
array5: Array<App.NestedData>;
array6: Array<App.NestedData>;
};
}
