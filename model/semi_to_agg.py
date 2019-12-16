#!/usr/bin/env python
import sys
import pickle

def predict_SemiToAgg (mine, avg, n):
	model = pickle.load(open('C:/xampp/htdocs/Knowldemort/model/SemiToAgg_'+str(n)+'.sav', 'rb'))
	return model.predict([(mine, avg)])

x = predict_SemiToAgg (float (sys.argv[1])/100, float(sys.argv[2])/100, sys.argv[3])
# x = predict_SemiToAgg (25, 20, 1)
print (x[0])