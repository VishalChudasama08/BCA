using System;

namespace array_2d_005
{
    internal class Program
    {
        static void Main(String[] args)
        {
            int[,] a = new int[3, 3];
            Console.WriteLine("Enter 3*3 2D Array Value : ");
            for (int i = 0; i < 3; i++)
            {
                for (int j = 0; j < 3; j++)
                {
                    a[i, j] = Convert.ToInt32(Console.Read()); // read() method, read on string type, and a variable is intizer then read() method return value convert on intizer using Convert object ToInt32 method to convert in int (normal int = int32) 
                }
            }
            Console.WriteLine("3*3 2D Array Value is : ");
            for (int i = 0; i < 3; i++)
            {
                for (int j = 0; j < 3; j++)
                {
                   Console.Write(a[i, j] + "\t"); 
                }
                Console.WriteLine();
            }
        }
    }
}